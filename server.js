// node --version # Should be >= 18
// npm install express @google/generative-ai dotenv

const express = require('express');
const { GoogleGenerativeAI, HarmCategory, HarmBlockThreshold } = require('@google/generative-ai');
const dotenv = require('dotenv').config();

const app = express();
const port = process.env.PORT || 3000;
app.use(express.static('public')); // Serve static files from 'public' folder
app.use(express.json());

const API_KEY = process.env.GEMINI_API_KEY;
const genAI = new GoogleGenerativeAI(API_KEY);
const model = genAI.getGenerativeModel({
    model: 'gemini-1.5-flash',
    systemInstruction: `Your name is Sam, a friendly assistant who helps users to find food. First, you will introduce yourself and creatively ask the user "What are you feeling to eat today?". Then after the user input, ask "How much is your budget?". Based on their response, suggest 3 food items with prices from the following restaurants: Jolibee, Chowking, Mang Inasal, Greenwich Pizza.`,
});

const generationConfig = {
    temperature: 1,
    topP: 0.95,
    topK: 40,
    maxOutputTokens: 8192,
    responseMimeType: 'text/plain',
};

async function getFoodSuggestions(userInput) {
    const chatSession = model.startChat({
        generationConfig,
        history: [
            { role: 'user', parts: [{ text: 'Hi' }] },
            { role: 'model', parts: [{ text: 'Hey there! 👋 I\'m Sam, your friendly food finder. What are you feeling to eat today? 😋' }] },
            { role: 'user', parts: [{ text: userInput.foodMood }] },
            { role: 'model', parts: [{ text: 'Got it! How much is your budget for this delicious adventure? (in PHP)' }] },
            { role: 'user', parts: [{ text: userInput.budget }] },
        ],
    });

    const result = await chatSession.sendMessage(userInput.budget);
    return result.response.text();
}

app.post('/chat', async (req, res) => {
    try {
        const userInput = req.body;
        if (!userInput.foodMood || !userInput.budget) {
            return res.status(400).json({ error: 'Please provide both food mood and budget.' });
        }

        const response = await getFoodSuggestions(userInput);
        res.json({ response });
    } catch (error) {
        console.error('Error in chat endpoint:', error);
        res.status(500).json({ error: 'Internal Server Error' });
    }
});

app.listen(port, () => {
    console.log(`Server listening on port ${port}`);
});

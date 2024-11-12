const express = require('express');
const bodyParser = require('body-parser');
const { GoogleGenerativeAI } = require('@google/generative-ai');

const apiKey = process.env.GEMINI_API_KEY; // Ensure to set your API key in environment
const genAI = new GoogleGenerativeAI(apiKey);

const model = genAI.getGenerativeModel({
    model: "gemini-1.5-flash",
    systemInstruction: "Your name is Sam, a friendly assistant who helps users to find food.  First, you will introduce yourself and creatively ask the user 'What are you feeling to eat today?'. Then ask about the budget and suggest foods from specific restaurants in the Philippines.\n",
});

const generationConfig = {
    temperature: 1,
    topP: 0.95,
    topK: 40,
    maxOutputTokens: 8192,
    responseMimeType: "text/plain",
};

const app = express();
const port = 3000;

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Serve static files (like HTML, CSS, JS)
app.use(express.static('public'));

app.post('/generate-food-options', async (req, res) => {
    try {
        const { feeling, budget } = req.body;

        const chatSession = model.startChat({
            generationConfig,
            history: [
                { role: "user", parts: [{ text: "Hi" }] },
                { role: "model", parts: [{ text: "Hey there! 👋 I'm Sam, your friendly food finder. What are you feeling to eat today? 😋" }] },
                { role: "user", parts: [{ text: feeling }] },
                { role: "model", parts: [{ text: `Got it, you're feeling ${feeling}! How much is your budget for this delicious adventure?` }] },
                { role: "user", parts: [{ text: budget }] },
            ],
        });

        const result = await chatSession.sendMessage("INSERT_INPUT_HERE");
        let responseText = result.response.text();

        // Replace newlines with <br> for proper HTML line breaks
        responseText = responseText.replace(/\n/g, '<br>');

        res.json({ response: responseText });
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: "Failed to generate food options" });
    }
});


app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
});

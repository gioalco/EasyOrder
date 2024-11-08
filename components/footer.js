const footerTemplate = document.createElement('template');

footerTemplate.innerHTML = `
    <style>
        /* Footer */
        footer {
            padding: 20px;
            background-color: #333;
            color: white;
            text-align: center;
        }

        footer a {
            color: #FF6347;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #e55341;
        }
    </style>
    
    <footer>
        <p>&copy; 2024 EasyOrder Restaurant</p>
        <div>
            <a href="/index.php">Home</a> |
            <a href="/menu.php">Menu</a> |
            <a href="/order.php">Order Online</a> |
            <a href="/contact.php">Contact Us</a>
        </div>
    </footer>
`;

class Footer extends HTMLElement{
    constructor() {
        super();
    }
    connectedCallback() {
        const shadowRoot = this.attachShadow({mode: 'closed'});
        shadowRoot.appendChild(footerTemplate.content);
    }
}

customElements.define('footer-component', Footer);
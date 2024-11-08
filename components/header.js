const headerTemplate = document.createElement('template');

headerTemplate.innerHTML = `

    <style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

    header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: #333;
        color: white;
    }
    
    header h1{
        font-size: 24px;
    }
    
    nav{
        box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);
    }
    
    nav ul{
        width: 100%;
        list-style: none;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }
    
    nav li{
        height: 50px;
    }
    
    nav a{
        color: white;
        font-weight: bold;
        transition: color 0.3s;
        
        height: 100%;
        padding: 0 30px;
        text-decoration: none;
        display: flex;
        align-items: center;
    }
    
    nav a:hover{
        border-radius: 25px;
        font-weight: 600; 
        background-color: #334;
    }
    
    nav li:first-child{
        margin-right: auto;
    }
    
    .sidebar{
        position: fixed;
        top: 0;
        right: 0;
        height: 100vh;
        width: 250px;
        z-index: 999;
        background-color: #333;
        box-shadow: -10px 0 10px rgba(0,0,0,0.1);
        display: none;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
    }
    
    .sidebar li{
        width: 100%;
    }
    
    .sidebar a{
        width: 100%;
    }
    
    .menu-button{
        display: none;
    }
    
    footer{
        position: absolute;
        bottom: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: #333;
        color: white;
    }
    
    @media(max-width: 1085px){
        .hideOnMobile{
            display: none;
        }
        .menu-button{
            display: block;
        }
    }
    
    @media(max-width: 400px){
        .sidebar{
            width: 100%;
        }
    }
    </style>
    
    <header>
        <h1>EasyOrder Restaurant</h1>
        <nav>
            <ul class = "sidebar">
                <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/restaurant.php">Restaurant</a></li>
                <li><a href="/order.php">Order Online</a></li>
                <li><a href="/contact.php">Contact Us</a></li>
                <li><a href="/about-us.php">About Us</a></li>
                <li><a href="/user-profile.php">Profile</a></li>
            </ul>
            <ul>
                <li class = "hideOnMobile"><a href="/index.php">Home</a></li>
                <li class = "hideOnMobile"><a href="/restaurant.php">Restaurant</a></li>
                <li class = "hideOnMobile"><a href="/order.php">Order Online</a></li>
                <li class = "hideOnMobile"><a href="/contact.php">Contact Us</a></li>
                <li class = "hideOnMobile"><a href="/about-us.php">About Us</a></li>
                <li class = "hideOnMobile"><a href="/user-profile.php">Profile</a></li>
                <li class = "menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
            </ul>
        </nav>
    </header>
    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }

        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
    </script>
`;

class Header extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        const shadowRoot = this.attachShadow({mode: 'closed'});
        shadowRoot.appendChild(headerTemplate.content);
    }
}

customElements.define('header-component', Header);
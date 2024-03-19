/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "2200px",
            },
            fontFamily: {
                heading: ["Martel",'serif'],
                text: ["Raleway", 'sans-serif'],
                // handwriting:["Dancing Script", 'cursive']
            },
            colors: {
                primary: {
                    400: "#fff",
                    600: "#eeeeee",
    
                },
                secondary: {
                    200: "#818181",
                    400: "#525252",
                },
                action:{
                    200:'#FFDB3E',
                    400:'#efc71a',
                    600:'#FDCE05'
                   
                },
                fontLight: "#fff",
                fontDark: "#000",
                bgDark: {
                    400: "#242424",
                },
                bgLight: {
                    200: "#fff",
                    400: "#eeeeee",
                },
            },
        },
    },
    plugins: [require('flowbite/plugin')],
};

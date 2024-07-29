/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    screens: {
      sm: "480px",
      sm2: "640px",
      md: "768px",
      lg: "976px",
      xl: "1440px",
      xxl: "1700px",
    },

    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "2em",
        lg: "2em",
        xl: "2em",
        xxl: "12em",
      },
    },

    colors: {
      "bleu-fonce": "#1F4E6F", // Bleu foncé
      "vert-militaire": "#748245", // Vert militaire
      "rose-vieux": "#94677A", // Rose vieux
      "bleu-vert": "#497A84", // Bleu-vert
      "blanc-gris": "#ECF1F5", // Blanc gris
      "vert-olive": "#627B3D", // Vert olive
      "blanc-bg": "#FFFEFF", // Blanc
      "bleu-nuit": "#3D4B66", // Bleu nuit
      "bleu-vif": "#2777AC", // Bleu vif
      "rose-rouge": "#C2236B", // Rose rouge
      "bleu-turquoise": "#266C7B", // Bleu turquoise
      noir: "#000000", // Noir
      mauve: "#6A4D6F",
      nav: "#117F67",
      "text-nav": "#deeae7",
    },

    extend: {
      backgroundImage: {
        hero: "url('img/hero.webp')",
        "kids-school": "url('img/kids-school.webp')",
        quote: "url('img/quote.webp')",
      },

      fontFamily: {
        body: ["Poppins", "sans-serif"],
      },
      listStyleImage: {
        checklist: 'url("/img/check.svg")',
      },
      keyframes: {
        pulse: {
          "0%": { color: "#000000" },
          "100%": { color: "#1F4E6F" },
        },
      },
      animation: {
        "pulse-1": "pulse 3s infinite ease-in-out alternate",
        "pulse-2": "pulse 3s infinite ease-in-out 3s alternate",
        "pulse-3": "pulse 3s infinite ease-in-out 5s alternate",
        "pulse-4": "pulse 3s infinite ease-in-out 7s alternate",
        "pulse-5": "pulse 3s infinite ease-in-out 11s alternate",
        "pulse-6": "pulse 3s infinite ease-in-out 13s alternate",
        "pulse-7": "pulse 3s infinite ease-in-out 17s alternate",
        "pulse-8": "pulse 3s infinite ease-in-out 19s alternate",
        "pulse-9": "pulse 3s infinite ease-in-out 23s alternate",
      },
    },
  },
  plugins: [
    // // .prettierrc
    // {
    //   tailwindConfig: "./styles/tailwind.config.js",
    // },
  ],
};

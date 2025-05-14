module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["sans-serif"],
        cormorant: ['"Cormorant Garamond"', "Helvetica", "Arial", "sans-serif"],
      },
      colors: {
        primary: "#f26d89",
        footer: "#302836",
        background: "var(--background)",
        foreground: "var(--foreground)",
        "white-opacity-11": "rgba(255,255,255,.11)",
      },
      maxWidth: {
        1400: "1400px",
        800: "1036px",
      },
    },
  },
  plugins: [],
};
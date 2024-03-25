/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

export default {
  content: ["./resources/**/*blade.php", "/resources/**/*.tsx"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter var", defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [require("@tailwindcss/forms")],
};

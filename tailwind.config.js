const theme = require("./theme.json");
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./*.php", "./**/*.php", "./resources/css/*.css", "./resources/js/*.js", "./safelist.txt"],
	theme: {
		container: {
			padding: {
				DEFAULT: "1rem",
				sm: "2rem",
				lg: "0rem",
			},
		},
		extend: {
			colors: tailpress.colorMapper(tailpress.theme("settings.color.palette", theme)),
			fontSize: [tailpress.fontSizeMapper(tailpress.theme("settings.typography.fontSizes", theme)), { "5.5xl": "3.25rem" }],
			colors: {
				// helpcompBase: "#222426",
				// helpcompBlack: "#17181A",
				helpcompBlack: "#212529",
				helpcompBlue: "#eff6fe",
				helpcompBlueDark: "#091c2a",
				// helpcompGray: "#727980",
				helpcompGray: "#6D7680",
				helpcompGrayLight: "#98A5B3",
				// helpcompRed: "#e73031",
				helpcompRed: "#D92130",
				helpcompRedDark: "#a61120",
			},
			gridTemplateColumns: {
				// Simple 16 column grid
				14: "repeat(14, minmax(0, 1fr))",
			},
		},
		fontFamily: {
			sans: ["Outfit, sans-serif"],
		},
		screens: {
			xxs: "360px",
			xs: "480px",
			sm: "640px",
			md: "768px",
			lg: "1024px",
			xl: "1280px",
			"2xl": "1536px",
			"3xl": "1800px",
		},
	},
	plugins: [tailpress.tailwind, require("@tailwindcss/typography"), require("@tailwindcss/forms")],
	safelist: ["w-4", "h-4", "xl:-left-3", "rotate-180", "max-xl:overflow-hidden", "max-xl:rotate-180"],
};

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundColor: {
                "haiti": "#171b38",
                "cloud-burst": "#222751",
                "mulled-wine": "#454c6b",
                "slate-grey": "#758095",
                "heather": "#b7c5c6",
                "honeydew": "#f3ffed",

                "tuna": "#3C204B",
                "dirty-purple": "#634d6f",
                "spun-pearl": "#b1a6b7",
                "iron": "#d8d2db"
            },
            textColor: {
                "haiti": "#171b38",
                "cloud-burst": "#222751",
                "mulled-wine": "#454c6b",
                "slate-grey": "#758095",
                "heather": "#b7c5c6",
                "honeydew": "#f3ffed",

                "tuna": "#3C204B",
                "dirty-purple": "#634d6f",
                "iron": "#d8d2db"

            },
            borderColor: {
                "tuna": "#3C204B",
                "dirty-purple": "#634d6f",
                "iron": "#d8d2db"

            }
        },
    },
    plugins: [],
}


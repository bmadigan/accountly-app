const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'slate': {
                    default: '#7181A2',
                    '100': '#F9FAFB',
                    '200': '#D7DBE5',
                    '300': '#B5BDCF',
                    '400': '#939FB8',
                    '500': '#7181A2',
                    '600': '#5B6A8B',
                    '700': '#49556F',
                    '800': '#364053',
                    '900': '#242A38'
                },
                'orchid': {
                    default: '#8871A2',
                    '100': '#FAF9FB',
                    '200': '#DDD7E5',
                    '300': '#C1B5CF',
                    '400': '#A593B8',
                    '500': '#8871A2',
                    '600': '#715B8B',
                    '700': '#5B496F',
                    '800': '#443653',
                    '900': '#2D2438'
                },
                spacing: {
                    '72': '18rem',
                    '84': '21rem',
                    '96': '24rem',
                }
            }
        },
    },
    variants: {},

    plugins: [
        require("@tailwindcss/ui")({
            layout: "sidebar"
        })
    ]
};

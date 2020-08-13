const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                light: {raw: "(prefers-color-scheme: light)"},
                dark: {raw: "(prefers-color-scheme: dark)"}
            }
        },
        typography: (theme) => ({
            dark: {
                css: {
                    color: theme('colors.gray.300'),
                    a: {
                        color: theme('colors.green.500'),
                        '&:hover': {
                            color: theme('colors.green.500'),
                        },
                    },

                    h1: {
                        color: theme('colors.gray.300'),
                    },
                    h2: {
                        color: theme('colors.gray.300'),
                    },
                    h3: {
                        color: theme('colors.gray.300'),
                    },
                    h4: {
                        color: theme('colors.gray.300'),
                    },
                    h5: {
                        color: theme('colors.gray.300'),
                    },
                    h6: {
                        color: theme('colors.gray.300'),
                    },

                    strong: {
                        color: theme('colors.gray.300'),
                    },

                    code: {
                        color: theme('colors.gray.300'),
                    },

                    figcaption: {
                        color: theme('colors.gray.500'),
                    },
                },
            },
        })

    },
    variants: {},
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/ui'),
        require('@tailwindcss/typography'),
        function ({addBase, config}) {
            addBase({
                body: {
                    color: config("theme.colors.black"),
                    backgroundColor: config("theme.colors.white")
                },
                "@screen dark": {
                    body: {
                        color: config("theme.colors.gray.200"),
                        backgroundColor: config("theme.colors.gray.800")
                    }
                }
            });
        }
    ],
};

import globals from "globals";
import pluginJs from "@eslint/js";
import pluginVue from "eslint-plugin-vue";


export default [
    {
        ignores: [
            "node_modules/**",
            "vendor/**",
            'public/build/**',
            'postcss.config.js'
        ]
    },
    {
        files: ["**/*.{js,mjs,cjs,vue}"],
        rules: {
            'semi': ["error", "always"]
        },
    },
    {
        languageOptions: { globals: globals.browser }
    },
    pluginJs.configs.recommended,
    ...pluginVue.configs["flat/essential"],
];

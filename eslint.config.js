import globals from "globals";
import pluginJs from "@eslint/js";
import pluginVue from "eslint-plugin-vue";


export default [
    {
        ignores: [
            "node_modules/**",
            "vendor/**",
        ]
    },
    {files: ["**/*.{js,mjs,cjs,vue}"]},
    {languageOptions: { globals: globals.browser }},
    pluginJs.configs.recommended,
    ...pluginVue.configs["flat/essential"],
];

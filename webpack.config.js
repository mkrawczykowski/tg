const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

module.exports = (env, argv) => {
  console.log(`This is the Webpack 5 'mode': ${argv.mode}`);
  return {
    entry: './src/index.js',
    output: {
      filename: 'main.min.js',
      path: path.resolve(__dirname, 'dist'),
    },
    watchOptions: {
      ignored: /node_modules/,
    },
    plugins: [new MiniCssExtractPlugin({
      filename: "main.min.css"
    })],
    module: {
      rules: [
        {
          test: /\.s[ac]ss$/i,
          use: [
            MiniCssExtractPlugin.loader,
            "css-loader",
            "postcss-loader",
            "sass-loader",
          ],
        },
      ],
    },
    optimization: {
      minimizer: [
        new CssMinimizerPlugin(),
      ],
    }
  }

};
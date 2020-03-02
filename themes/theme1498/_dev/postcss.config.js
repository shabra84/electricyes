module.exports = {
  plugins: {
    'autoprefixer': {},
    'postcss-plugin-px2rem': {
      rootValue: 16,
      unitPrecision: 5,
      selectorBlackList: [],
      propWhiteList: [],
      propBlackList: [],
      ignoreIdentifier: false,
      replace: true,
      mediaQuery: false,
      minPixelValue: 1
    }
  }
};
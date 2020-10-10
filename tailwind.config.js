module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [
    './resources/js/**/*.js',
    './resources/js/**/*.vue',
    './resources/scss/**/*.scss',
    './resources/views/**/*.blade.php'
  ],
  theme: {
    container: {
      center: true,
      padding: {
        default: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
      },
    },
    extend: {
      colors: {
        primary: {
          light: '#200C39',
          default: '#190E28',
        },
        secondary: {
          light: '#ff0180',
          default: '#D8006B',
        },
      }
    },
  },
  variants: {},
  plugins: [],
}

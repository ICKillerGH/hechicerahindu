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
        gray: {
          '50': '#f9fafb',
          '100': '#e5e7eb',
          '200': '#f4f5f7',
          '300': '#d2d6dc',
          '400': '#9fa6b2',
          '500': '#6b7280',
          '600': '#4b5563',
          '700': '#374151',
          '800': '#252f3f',
          '900': '#161e2e',
        },
        red: {
          '50': '#fdf2f2',
          '100': '#fde8e8',
          '200': '#fbd5d5',
          '300': '#f8b4b4',
          '400': '#f98080',
          '500': '#f98080',
          '600': '#e02424',
          '700': '#c81e1e',
          '800': '#9b1c1c',
          '900': '#771d1d',
        },
        green: {
          '50': '#f3faf7',
          '100': '#def7ec',
          '200': '#bcf0da',
          '300': '#84e1bc',
          '400': '#31c48d',
          '500': '#0e9f6e',
          '600': '#057a55',
          '700': '#046c4e',
          '800': '#03543f',
          '900': '#014737',
        },
        blue: {
          '50':  '#ebf5ff',
          '100': '#e1effe',
          '200': '#c3ddfd',
          '300': '#a4cafe',
          '400': '#76a9fa',
          '500': '#3f83f8',
          '600': '#1c64f2',
          '700': '#1a56db',
          '800': '#1e429f',
          '900': '#233876',
        },
        indigo: {
          '50':  '#f0f5ff',
          '100': '#e5edff',
          '200': '#cddbfe',
          '300': '#b4c6fc',
          '400': '#8da2fb',
          '500': '#6875f5',
          '600': '#5850ec',
          '700': '#5145cd',
          '800': '#42389d',
          '900': '#362f78',
        }
      }
    },
  },
  variants: {
    opacity: ['responsive', 'hover', 'focus', 'disabled'],
    pointerEvents: ['responsive', 'disabled'],
    shadowOutline: ['focus']
  },
  plugins: [
    require('tailwindcss-shadow-outline-colors')()
  ],
}

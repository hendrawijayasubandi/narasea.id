/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    colors: {
      'white': '#FAFEFF',
      'gray': '#D9D9D9',
      'black': '#111111',
      'blue': '#083C75',
      'blue-hover': '#062B54',
      'teal-blue': '#019AAA',
      'teal-blue-hover': '#017C85',
      'raspberry-pink': '#E84373',
      'raspberry-pink-hover': '#C73761',
      'wine-red': '#750A29',
      'cocoa-brown': '#7D3612',
      'bronze': '#A75831',
      'peachy-orange': '#FF864A',
      'peachy-orange-hover': '#D96630',
      'golden-yellow': '#FFD039',
    },
    fontFamily: {
      calimate: ['Calimate', 'sans-serif'],
      ttNorms: ['TTNorms', 'sans-serif'],
    },
    extend: {
      spacing: {
        '128': '32rem',
        '144': '36rem',
      },
      borderRadius: {
        '4xl': '2rem',
      }
    }
  },
  plugins: [],
}
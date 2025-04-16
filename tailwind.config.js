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
      'black': '#111111',
      'blue': '#083C75',
      'teal-blue': '#019AAA',
      'raspberry-pink': '#E84373',
      'wine-red': '#750A29',
      'cocoa-brown': '#7D3612',
      'bronze': '#A75831',
      'peachy-orange': '#FF864A',
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
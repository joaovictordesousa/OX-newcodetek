/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php', // Arquivos Blade do Laravel
    './resources/js/**/*.js', // Arquivos JavaScript
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Helvetica', 'Arial', 'sans-serif'],
      },
      colors: {
        primary: '#3490dc',
        secondary: '#ffed4a',
        danger: '#e3342f',
      },
      fontSize: {
        'sm': '0.875rem',
        'md': '1rem',
        'lg': '1.25rem',
        'xl': '1.5rem',
      },
      spacing: {
        '2': '0.5rem',
        '4': '1rem',
        '8': '2rem',
      },
    },
  },
  plugins: [
    // Adicione plugins personalizados aqui, se necessário
  ],
}

/** @type {import('tailwindcss').Config} */
module.exports = {
  prefix: 'tw-',
  content: [
    './index.php',
    './mvc/views/**/*.php', // Quét tất cả các tệp PHP trong thư mục views và các thư mục con
    './mvc/controllers/**/*.php', // Quét tất cả các tệp PHP trong thư mục controllers và các thư mục con
    './mvc/models/**/*.php', // Quét tất cả các tệp PHP trong thư mục models và các thư mục con
    './public/css/style.css', 
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}


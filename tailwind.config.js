/** @type {import('tailwindcss').Config} */
module.exports = {
      content: ["./resources/website/**/*.blade.php", "./resources/website/**/*.js", "./resources/website/sass/**/*.scss",
            "./resources/admin/**/*.blade.php", "./resources/admin/**/*.js", "./resources/admin/**/*.scss", "./resources/admin/**/*.css"],
      theme: {
            container: {
                  center: true,
            },
            screens: {
                  xs: '480px',
                  sm: '578px',
                  md: '768px',
                  lg: '992px',
                  xl: '1240px',
                  '2xl': '1496px',
            },
            extend: {
                  gridRow: {
                        'span-16': 'span 16 / span 16',
                  }
            },
      },
      plugins: [],
}


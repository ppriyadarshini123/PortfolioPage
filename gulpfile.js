var gulp = require('gulp');
var browserSync = require('browser-sync').create();
//var reload = browserSync.reload;
//
//
//// Static server
//gulp.task('browser-sync', function() {
//    browserSync.init({
//        /*server: {
//            baseDir: "./"
//        }*/
//    	proxy: 'http://localhost/Payal_Priyadarshini_PHP_Project_Template/'
//    });



gulp.task('browser-sync', function ()
{
    browserSync.init({
        watch: true,
        proxy: "http://localhost/Payal_Priyadarshini_Portfolio_HomePage/PortfolioPage/"
    //server: "./Payal_Priyadarshini_Portfolio_HomePage/PortfolioPage/"
             //   proxy: "http://localhost/Payal_Priyadarshini_Portfolio_HomePage/PortfolioPage/"
                // proxy: "http://localhost/Payal_Priyadarshini_Portfolio_HomePage/PortfolioPage/"  
                 
               //  proxy:"http://localhost:3001/Payal_Priyadarshini_Portfolio_HomePage/PortfolioPage/index.php"
//        baseDir: "./Payal_Priyadarshini_Portfolio_HomePage/PortfolioPage/",
//        open:true,
//        notify:false
//        server: {
//            baseDir: "./Payal_Priyadarshini_Portfolio_HomePage/PortfolioPage/"
//        }
//        server: {
//             baseDir: '/Payal_Priyadarshini_Portfolio_HomePage/PortfolioPage/'
//        },
    });
    
    // Change the default port
//ui: {
//    port: 3000;
//}
    
});

//gulp.watch("index.php").on('change', browserSync.reload);

//});


# onLabTest

### Description:
  OnLabTest is a custom theme wordpress project which include the basic of a  wordpress project, and with all custom functionalities/plugins/widgets to fit into the assigned task.
  
### Instalation
  1. Clone Proyect into your wordpress environment (xampp, lamp, wamp, lemp, etc):
  2. open wp-config.php and modify information to fit into your environment, also create a new bd called `onlabtest` or with any name you want, but remember to modify that information in the wp-config.php file
  3. import the SQL file `onlabtestDB.zip` into the new database
  4. admin user: `txileno` . Password: `ciencias87.`
  
### Components:
  1. in wp-content:      
      - plugins:
        - montevideo-temperature
      - themes:
        - onLabTest
          
#### in plugins
  1. on montevideo-temperature:
     - montevideo-temperature.php: api conection with openweathermap using WP functionalities, and minimal arithmetic to have celsius temperature
        - css folder: which contains style.css & style.min.css of the element added with this plugin.
        
#### in onLabTest

  1. on root:
     - header.php: which contains a customizable menu, and also if temperature plugin is active, it will show that information
     - footer.php: the top element and the 3rd column are widgets area, the 3rd column will show as the same other 3 if the element added on the widget is a menu.
     - single.php: just for testing and be a ble to show post
     - page.php: content of created pages, currently there are 6 pages, the home -> test -> practice test were created to be able to generate breadcrum, on index.php and also in the same page.php
     - style.css & style.min.css: style and minify css for the theme
     - index.php: contains the asked job, it has 3 sections
       - select-category-section: in which is located the modal with the button onclick, to close the modal hit some of the list element
       - section-1: is an static version trying to fit the psd, didn't have time to work on this functionality
       - section-2: which contains the content of a "random/new" page, and also it breadcrum if it is child from other page, currently it will only display one  page (static ID).
     - functions.php: the core functionality, it can be refactored to have a better consistency and just have the calls and not display the functions -to do- also here is located the widget declaration.
     
#### Widgets:
  Only footer 3, and footer top are currently working, they were made just for testing/show porpuse
  
#### Database:
  it is located on the root of this project as a zip file

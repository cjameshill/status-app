<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100vh;
                padding: 3em;
                font-size: 12px;
            }
            
            h1, button, input, li {
                font-family: Lato, sans-serif;
                font-size: 2em;
                padding: 1em;
                margin: 0.3em;
            }
            
            li {
                width: 75%;
                display: block;
                background: rgb(149, 255, 149);
                cursor: pointer;
            
            }
            
            li:hover {
                background: orange;
            }
            
            .completed {
                text-decoration: line-through;
                background: lightgrey;
            }
            
            

        </style>
    </head>
    <body>
        <div id="app">
         
          
           <ul>
               <li :class="{ 'completed' : task.completed }"
                   v-for="task in tasks"
                   @click="task.completed = ! task.completed"
                >
                    @{{ task.body }}
                </li>
           </ul>
        </div>
        
                <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.15/vue.js"></script>
                <script>
                    
                    new Vue({
                        el: '#app'
                        
                    });
                    
                    
        
        
                </script>
    </body>
</html>

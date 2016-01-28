<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
                width: 100%;
                padding: 3em;
                font-size: 12px;
            }
            
            h1, button, input {
                font-family: Lato, sans-serif;
                font-size: 3em;
            }
            
            input[type="text"] {
                width: 80px;
                text-align: center;
                border: none;
            }
            
            /* always present */
            .expand-transition {
              transition: all .3s ease;
              overflow: hidden;
                opacity: 1;
            }

            /* .expand-enter defines the starting state for entering */
            /* .expand-leave defines the ending state for leaving */
            .expand-enter, .expand-leave {
              opacity: 0;
            }
            
            .bounce-enter {
                  animation: bounce-in .5s;
                }
                .bounce-leave {
                  animation: bounce-out .5s;
                }
                @keyframes bounce-in {
                  0% {
                    opacity: 0;
                  }
                  100% {
                    opacity: 1;
                  }
                }
                @keyframes bounce-out {
                  0% {
                    opacity: 1;
                  }
                  100% {
                    opacity: 0;
                  }
                }
            
            

        </style>
    </head>
    <body>
        <div id="app">
           
               <dogtags-score-counter subject="Dog Tags Score"></dogtags-score-counter>
                
        </div>
        
        <template id="dogTagsScoreCount-template">
            <h1>@{{ subject }}</h1>
            <form>
                <button @click.prevent="count -= 1" v-show="count > 0"  transition="bounce">Down</button><input type="text" length="2" v-model="count"><button @click.prevent="count += 1">Up</button>
            </form>
        </template>
        
                <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.15/vue.js"></script>
                <script>
                    
                    Vue.component('dogtags-score-counter', {
                        template: '#dogTagsScoreCount-template',
                        
                        props: ['subject'],
                        
                        data: function() {
                            return { count: 0};
                        }
                    });
                    
                    new Vue({
                        el: '#app'
                        
                    });
                    
                    
        
        
                </script>
    </body>
</html>

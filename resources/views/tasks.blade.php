<!DOCTYPE html>
<html>
    <head>
        <title>What are you working on?</title>
        	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:200|Lato:400|Lato:800" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div id="app">
         <div class="tasksBox">
                <input class="searchTask" id="searchTask" name="searchTask" type="text" width="100%" v-model="searchQuery">
                  <app-task :filter-key="searchQuery"></app-task>
                </div>
        </div>
             
             <template id="tasks-template">
               <h1>Test</h1>
               
               <ul>
                   <li v-for="task in list | filterBy filterKey"><p class="taskTitle">@{{ task.title }} &nbsp; | by: @{{ task.owner }}</p></li>
               </ul>
               
             </template>
        
                <script src="http://code.jquery.com/jquery.js"></script>
                <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.15/vue.js"></script>
                <script src="js/test.js"></script>
    </body>
</html>

Vue.component('app-tasks', {
    
    props: {
        list: Array,
        filterKey: String
    },
    
    template: '#tasks-template',
    
    
    
     data: function() {
        return { task: '' };
    },
    
    created: function() {
        
        $.getJSON('api/tasks', function(tasks){
            this.list = tasks;
    
        }.bind(this));
    
    },
    
    computed: {
        remaining: function(){
           
            return this.list.filter(this.inProgress).length;
        }
    },
    
    methods: {
        isCompleted: function(task){
            return task.completed;
        },
        
        inProgress: function(task){
            return ! this.isCompleted(task);
        },
        
        deleteTask: function(task){
            this.list.$remove(task);
        },
        
        clearCompleted: function(task){
            this.list = this.list.filter(this.inProgress);
        },
        
        addTask: function() {
            this.$dispatch('new-task', this.task);
            
            this.task = '';
        }
        
        
    }
    
   
    
});


new Vue({
        el: '#app',
    
        data: {
            searchQuery: '',
            tasks: []
        },
    
    
        methods: {
           handelNewTask: function(task){
               this.tasks.push({ body: task, completed: false });
               
           }
       }

    });
                    
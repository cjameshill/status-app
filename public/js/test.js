Vue.component('app-task', {
    
    template: '#tasks-template',
    
    props: {
        filterKey: String
    },
    
    data: function() {
        return {
            list: []
        };
    },
    
    created: function() {
        
        $.getJSON('api/tasks', function(tasks){
            this.list = tasks;
    
        }.bind(this));
    }
    
});


new Vue({
    
    el: '#app',
    
    
    data: {
        searchQuery: ''
    }
    
    
});
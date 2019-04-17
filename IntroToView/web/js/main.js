Vue.component('todo-list', {

        // listname: {
        //     type: string,
        //     required: true,
        // },


    template:
    `<div class='todo-list> 
        <ol>  
    <li>
        v-for="item in groceryList"
        v-bind:todo="item"
        v-bind:key="item.id">
    </li>
    
    </ol>
</div>`,



    data: function () {
        return {
            groceryList: [
                { id: 0, text: 'Vegetables' },
                { id: 1, text: 'Cheese' },
                { id: 2, text: 'Whatever else humans are supposed to eat' },

            ]
        }

    },





})







var app = new Vue({
    el: '#app',
    data: {
        titletip: 'Hello Vue!' + new Date().toLocaleDateString(),
        body: "Something else",
        messageclass: 'btn btn-primary',
        showme: true,
        todos: [
            { id: 0, text: 'first', state: 'draft' },
            { id: 1, text: 'second:', state: 'in progress' },
            { id: 2, text: 'third:', state: 'completed' },
        ],



    },

    methods: {
        reverseMessage() {
            var self = this;
            if (!this.interval) {
                this.interval = setInterval(function () {
                    self.body = self.reversedMessage;
                }, 1000);
            } else {
                clearInterval(this.interval);
                this.interval = 0;

            }

        },


    },

    computed: {
        reversedMessage: function () {
            return this.body.split('').reverse().join('');
        },
    }

})


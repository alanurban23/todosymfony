/**
 * Created by largo on 22.07.2016.
 */
Vue.config.delimiters = ["[[", "]]"];

new Vue({

    el: '#app',

    data: {
        name: '',
        user: '',
        category: 'Zadanie',
        messages: [],
        newMessage: {
            name: '',
            user: '',
            category: ''
        },
        tasks: [],
        path: document.location.pathname + 'rest/'
    },

    computed: {
        validation: function () {
            return {
                name: !!this.name.trim(),
                user: !!this.user.trim(),
            }
        },
        isValid: function () {
            var validation = this.validation
            return Object.keys(validation).every(function (key) {
                return validation[key]
            })
        },
    },

    ready: function () {
        this.load();
    },

    methods: {

        load: function () {
            $.getJSON(this.path, function (data) {
                this.tasks = data;
            }.bind(this))
        },

        onSubmitForm: function () {
            var instance = this;

            var message = {name: this.name, user: this.user, category: this.category};

            if (instance.isValid) {
                $.post(this.path, message, function (data) {
                    this.tasks = $.parseJSON(data);
                }.bind(this));
            }


        },
    }
});


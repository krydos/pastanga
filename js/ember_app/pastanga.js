Pastanga = Ember.Application.create();

Pastanga.IndexController = Ember.Controller.extend({
    actions: {
        sendText: function() {
            alert(this.get('pasteText'));
        }
    }
});

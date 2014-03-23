Pastanga = Ember.Application.create();

Pastanga.IndexController = Ember.Controller.extend({
    syntaxList: [
        {text: "Plain Text", value: 'plain'},
        {text: "C", value: 'C'},
        {text: "C++", value: 'CPP'},
        {text: "CSS", value: 'css'},
        {text: "Erlang", value: 'erlang'},
        {text: "Haskell", value: 'hs'},
        {text: "JavaScript", value: 'lua'},
        {text: "Lisp", value: 'lisp'},
        {text: "Pascal", value: 'pascal'},
        {text: "Perl", value: 'PERL'},
        {text: "PHP", value: 'PHP'},
        {text: "Scala", value: 'scala'},
        {text: "Shell", value: 'sh'},
        {text: "SQL", value: 'sql'},
        {text: "YAML", value: 'yaml'},
    ],
    actions: {
        sendText: function() {
            alert(this.get('syntax'));
        }
    }
});

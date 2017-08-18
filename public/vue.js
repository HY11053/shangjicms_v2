/**
 * Created by mikesonia on 2017/7/15.
 */
Vue.component('my-component',{
    props:['message'],
    template:'<div>A custom {{message}}component!</div>'
})
Vue.component('child', {
    // camelCase in JavaScript
    props: ['myMessage'],
    template: '<span>{{ myMessage }}</span>'
})
var Child={
    props:['message'],
    template:'<div>A custom component!{{message}} template</div>'
};
var app=new Vue({
    el:'#app',
    data:{

    },
    components:{
        'my-conponents':Child
    }
})
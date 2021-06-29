<template>
    <div>
        <ul v-for="event in events" v-bind:key="event">
            <li>{{event.title}}</li>
        </ul>
       
    </div>
    
</template>

<script>


export default {
    data(){
        return {
            events: []
        }
    }, 
    mounted() {
        axios.get('/api/events').then(response => {
            this.events = response.data;
        });
    
   
    }


}
</script>
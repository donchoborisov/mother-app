<template>
    <div >
          <p>
                    <label for="">Topic</label>
                    <select name="topic" required>
                       <option value="">Select Topic</option>
                       <option  v-for="topic in topics" :key="topic.id" value="{{topic.id}}">{{ topic.name }}</option>
                       
                    </select>
                     
                   

                        
                  </p>
    </div>
</template>

<script>
     import axios from 'axios'
    export default {
       

        data() {

            return {
                topics:{}
            }
           
        },

         mounted() {
           this.gettopics();
        },

        methods: {
            gettopics() {
                axios.get('/topics').then( (response) => {

                    this.topics = response.data.topics
                } ).catch ((errors) => {
                    console.log(errors)
                } );
            }
        }



    }
</script>

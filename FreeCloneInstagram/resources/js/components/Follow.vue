<template>
    <div>
         <button class="btn btn-primary" onclick="testFunction()">follow</button>
    </div>
</template>

<script>
    export default {
       props: ['userId', 'follows'],
       mounted() {
               console.log('Component mounted.')
           },
       methods: {
            function testFunction()
               {
                   console.log(alert('inside'));
               }
       }
    }
</script>



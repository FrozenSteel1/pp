<template>

    <div class="container">
        <div class="ui-widget">
            <label for="tags">Tags: </label>
            <input id="tags">
        </div>
    </div>

</template>

<script>


    export default {
        props: ['availableTags'],

        computed: {},
        name: "SearchComponent",
        mounted() {
            let data = () => {

                let arr = JSON.parse(this.availableTags)
                $("#tags").autocomplete({source: arr})
            };
            setTimeout(data, 0)


        },

    }


</script>


<style scoped>

</style>

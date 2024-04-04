<template>
    <select ref="select2Element" class="border w-100">
        <!-- Options will be dynamically loaded here -->
    </select>
</template>

<script>
export default {
    name: 'Select2AjaxComponent',
    props: {
        value: { // v-model binding
            type: [String, Number],
            default: ''
        },
        apiUrl: { // API endpoint prop
            type: String,
            required: true
        }
    },
    mounted() {
        const vm = this;
        $(this.$refs.select2Element).select2({
            ajax: {
                url: this.apiUrl, // Use the API endpoint prop
                dataType: 'json',
                delay: 250, // Delay for triggering the request after typing
                processResults: function (data) {
                    return {
                        results: data.map(item => ({
                            id: item.id,
                            text: item.name
                        }))
                    };
                },
                cache: true // Enable caching to improve performance
            }
        }).on('change', function () {
            vm.$emit('input', $(this).val());
        });
    },
    destroyed() {
        $(this.$refs.select2Element).select2('destroy');
    }
};
</script>

<style>
/* You may need to add custom styles here */
</style>

<template lang="html">
    <div id="filter">
        
    </div>
    <div id="properties" class="properties">
        <div class="row">
            <div class="card" v-for="property in properties">
                <h4>{{ property.name }}</h4>
                <img data-src="holder.js/100px280?theme=thumb" alt="Thumbnail [100%x280]" style="height: 280px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22356%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160337d29eb%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160337d29eb%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22117.34375%22%20y%3D%22148.1%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div>
                    <ul>
                        <li class="title bedroom">Bedroom: {{ property.bedroom }}</li>
                        <li class="title bathroom">Bathroom: {{ property.bathroom }}</li>
                        <li class="title storey">Storey: {{ property.storey }}</li>
                        <li class="title garage">Garage: {{ property.garage }}</li>
                        <li class="title price">Price: ${{ property.price }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            this.fetchData()
        },
        data () {
            return {
                properties: []
            }
        },
        methods: {
            fetchData () {
                axios.get('/api/properties')
                    .then((res) => {
                        this.properties = res.data
                })
                .catch((err) => {
                    console.log(err)
                })
            }
        }
    }
</script>
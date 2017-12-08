<template lang="html">
    <div id="properties" class="properties">
        <div class="filter form-group row">
            <h2>Search Properties:</h2>
            <div class="col-lg-4 col-md-6 col-sm-12 name filterbox">
                <label class="col-lg-4 col-md-4 col-sm-12 col-form-label" for="name">Name: </label>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <input type="text"
                           class="form-control"
                           name="name" value=""
                           v-model="property.name"
                           placeholder="Name"
                           v-on:keyup.enter="filter"/>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 bedroom filterbox" v-bind:class="{ 'has-error': bedroomHasError }">
                <label class="col-lg-4 col-md-4 col-sm-12 col-form-label">Bedroom: </label>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <input type="text"
                           class="form-control"
                           name="bedroom"
                           id="bedroom_input"
                           v-model="property.bedroom"
                           placeholder="Bedroom numbers"
                           v-on:keyup.enter="filter"/>
                    
                    <small>Can search by multipule numbers, eg: 1, 2, 3</small>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 bathroom filterbox" v-bind:class="{ 'has-error': bathroomHasError }">
                <label class="col-lg-4 col-md-4 col-sm-12 col-form-label">Bathroom: </label>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <input type="text"
                           class="form-control"
                           name="bathroom"
                           id="bathroom_input"
                           v-model="property.bathroom"
                           placeholder="Bathroom numbers"
                           v-on:keyup.enter="filter"/>
                    
                    <small>Can search by multipule numbers, eg: 1, 2, 3</small>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 storey filterbox" v-bind:class="{ 'has-error': storeyHasError }">
                <label class="col-lg-4 col-md-4 col-sm-12 col-form-label">Storey: </label>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <input type="text"
                           class="form-control"
                           name="storey"
                           id="storey_input"
                           v-model="property.storey"
                           placeholder="Storey numbers"
                           v-on:keyup.enter="filter"/>
                    
                    <small>Can search by multipule numbers, eg: 1, 2, 3</small>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 garage filterbox" v-bind:class="{ 'has-error': garageHasError }">
                <label class="col-lg-4 col-md-4 col-sm-12 col-form-label">Garage: </label>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <input type="text"
                           class="form-control"
                           name="garage"
                           id="garage_input"
                           v-model="property.garage"
                           placeholder="Garage numbers"
                           v-on:keyup.enter="filter"/>
                    
                    <small>Can search by multipule numbers, eg: 1, 2, 3</small>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 minprice filterbox"">
                <label class="col-lg-4 col-md-4 col-sm-12 col-form-label">min-price: </label>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <input type="number"
                           class="form-control"
                           name="minprice"
                           id="minprice_input"
                           v-model="property.minprice"
                           placeholder="Miniment price"
                           v-on:keyup.enter="filter"/>
                    <small>Number only</small>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 maxprice filterbox">
                <label class="col-lg-4 col-md-4 col-sm-12 col-form-label">max-price: </label>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <input type="number"
                           class="form-control"
                           name="maxprice"
                           id="maxprice_input"
                           v-model="property.maxprice"
                           placeholder="Maxmum price"
                           v-on:keyup.enter="filter"/>
                    <small>Number only</small>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 filter-buttom filterbox">
                <button type="submit" class="btn btn-primary" v-on:click="filter">Search</button>
            </div>
        </div>
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
                properties: [],
                property: {
                    name: '',
                    bedroom: '',
                    bathroom: '',
                    storey: '',
                    garage: '',
                    minprice: '',
                    maxprice: ''
                },
                bedroomHasError: false,
                bathroomHasError: false,
                storeyHasError: false,
                garageHasError: false
            }
        },
        methods: {
            fetchData () {
                axios.get('/api/properties')
                    .then((res) => {
                        this.properties = res.data
                })
                .catch((err) => {
                    console.log(err);
                })
            },

            filter () {
                var err = false;
                // init error class
                this.bedroomHasError = this.bathroomHasError = this.storeyHasError = this.garageHasError = false;

                // check bedroom input, which is only accept number and comma.
                if (this.property.bedroom.replace(/^[0-9.,]*/g, '')) {
                    this.bedroomHasError = true;
                    err = true;
                }

                // check bathroom input, which is only accept number and comma.
                if (this.property.bathroom.replace(/^[0-9.,]*/g, '')) {
                    this.bathroomHasError = true;
                    err = true;
                }

                // check storey input, which is only accept number and comma.
                if (this.property.storey.replace(/^[0-9.,]*/g, '')) {
                    this.storeyHasError = true;
                    err = true;
                }

                // check garage input, which is only accept number and comma.
                if (this.property.garage.replace(/^[0-9.,]*/g, '')) {
                    this.garageHasError = true;
                    err = true;
                }

                if (err) {
                    return false;
                }

                axios.post('/filter', this.property)
                    .then(
                        (res) => {
                        this.properties = res.data
                })
                .catch((err) => {
                        console.log(err)
                })
            }
        }
    }
</script>
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
                <label class="col-lg-4 col-md-4 col-sm-12 col-form-label">Min-price: </label>
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
                <label class="col-lg-4 col-md-4 col-sm-12 col-form-label">Max-price: </label>
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
            <label class="col-form-label"> Order By:
                <button type="button" class="btn btn-default"
                        v-for="item in sortItems"
                        v-on:click="invertSort(item)">
                    {{ item | capitalize }}<span class="arrow" v-bind:class="sortClass[item] < 0 ? 'dsc' : 'asc'"></span>
                </button>
            </label>
        </div>
        <div class="row">
            <div v-if="properties.length > 0">
                <div class="card col-sm-12 col-xs-12" v-for="property in sortProperties">
                    <h4>{{ property.name }}</h4>
                    <img class="property-images"
                         data-src="holder.js/100px280?theme=thumb"
                         alt="Thumbnail [100%x280]"
                         src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22356%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160337d29eb%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160337d29eb%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22117.34375%22%20y%3D%22148.1%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                         data-holder-rendered="true">
                    <div class="">
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
            <div v-else>
                <h3>Nothing can be found!</h3>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            this.fetchData()
        },

        data: function () {
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
                sortItems: ['name', 'bedroom', 'bathroom', 'storey', 'garage', 'price'],
                bedroomHasError: false,
                bathroomHasError: false,
                storeyHasError: false,
                garageHasError: false,
                sortOrders: true,
                sortKey: 'name',
                sortClass: []
            }
        },

        computed: {
           sortProperties: function () {
               var sortKey = this.sortKey;
               var order = this.sortOrders;
               var data = this.properties;

                data = data.slice().sort(function (a, b) {
                    a = a[sortKey];
                    b = b[sortKey];
                    return ( a === b ? 0 : a > b ? 1 : -1 ) * order;
                });

               return data;
           }
        },

        filters: {
            capitalize: function (str) {
                return str.charAt(0).toUpperCase() + str.slice(1)
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

            invertSort: function (key) {
                this.sortOrders = this.sortOrders * (-1);
                this.sortKey = key;
                this.sortClass[key] = false;

                if (this.sortOrders) {

                    this.sortClass[key] = this.sortOrders;
                }
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

                axios.post('api/filter', this.property)
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
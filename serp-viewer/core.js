new Vue({
    el: '#hello',
    data: {
        title1: "This is a test title editable as title 1 in the right hand bar | title 1",
        url1: "http://www.example.com/url",
        description1: "This is a sample meta description 1 you can edit in the right hand sidebar, the number of characters is also configurable by entering in your own meta description length",
        title2: "This is a test title editable as title 2 in the right hand bar | title 2",
        url2: "http://www.example.com/url",
        description2: "This is a sample meta description 2 you can edit in the right hand sidebar, the number of characters is also configurable by entering in your own meta description length",
        title3: "This is a test title editable as title 3 in the right hand bar | title 3",
        url3: "http://www.example.com/url",
        description3: "This is a sample meta description 3 you can edit in the right hand sidebar, the number of characters is also configurable by entering in your own meta description length",
        title4: "This is a test title editable as title 4 in the right hand bar | title 4",
        url4: "http://www.example.com/url",
        description4: "This is a sample meta description 4 you can edit in the right hand sidebar, the number of characters is also configurable by entering in your own meta description length",
        title5: "This is a test title editable as title 5 in the right hand bar | title 5",
        url5: "http://www.example.com/url",
        description5: "This is a sample meta description 5 you can edit in the right hand sidebar, the number of characters is also configurable by entering in your own meta description length",
        serp1: true,
        serp2: false,
        serp3: false,
        serp4: false,
        serp5: false,
        urllength: 80,
        titlelength: 70,
        desclength: 156
    },
    methods: {
           showDiv: function(param, opt,msg){
           this[param] = !this[param]
           this[opt] = msg
        }
    },
    computed: {
        fullTitle1: function () {
            if (this.title1.length > this.titlelength) {
                return this.title1 + ".."

            } else {
                return this.title1
            }

        },
        fullTitle2: function () {
            if (this.title2.length > this.titlelength) {
                return this.title2 + ".."

            } else {
                return this.title2
            }

        },
        fullTitle3: function () {
            if (this.title3.length > this.titlelength) {
                return this.title3 + ".."

            } else {
                return this.title3
            }

        },
        fullTitle4: function () {
            if (this.title4.length > this.titlelength) {
                return this.title4 + ".."

            } else {
                return this.title4
            }

        },
        fullTitle5: function () {
            if (this.title5.length > this.titlelength) {
                return this.title5 + ".."

            } else {
                return this.title5
            }

        },
        fullUrl1: function () {
            if (this.url1.length > this.urllength) {
                return this.url1 + ".."

            } else {
                return this.url1
            }

        },
        fullUrl2: function () {
            if (this.url2.length > this.urllength) {
                return this.url2 + ".."

            } else {
                return this.url2
            }

        },
        fullUrl3: function () {
            if (this.url3.length > this.urllength) {
                return this.url3 + ".."

            } else {
                return this.url3
            }

        },
        fullUrl4: function () {
            if (this.url4.length > this.urllength) {
                return this.url4 + ".."

            } else {
                return this.url4
            }

        },
        fullUrl5: function () {
            if (this.url5.length > this.urllength) {
                return this.url5 + ".."

            } else {
                return this.url5
            }

        },
        fulldesc1: function () {
            if (this.description1.length > this.desclength) {
                return this.description1 + ".."

            } else {
                return this.description1
            }

        },
        fulldesc2: function () {
            if (this.description2.length > this.desclength) {
                return this.description2 + ".."

            } else {
                return this.description2
            }

        },
        fulldesc3: function () {
            if (this.description3.length > this.desclength) {
                return this.description3 + ".."

            } else {
                return this.description3
            }

        },
        fulldesc4: function () {
            if (this.description4.length > this.desclength) {
                return this.description4 + ".."

            } else {
                return this.description4
            }

        },
        fulldesc5: function () {
            if (this.description5.length > this.desclength) {
                return this.description5 + ".."

            } else {
                return this.description5
            }

        }
    }
})
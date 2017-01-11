<template>
    <form class="donateForm">
        <input type="hidden" name="stripeEmail" v-model="stripeEmail">
        <input type="hidden" name="stripeToken" v-model="stripeToken">

        <h2 class="donateForm-title">Donate to the artist</h2>

        <div class="donateForm-amount">
            <label class="donateForm-amount-label" for="amount">
                Amount: <span class="donateForm-amount-label-currency">€</span>
            </label>
            
            <input class="donateForm-amount-input" type="number" name="amount" v-model="amount">
        </div>

        <button class="donateForm-button button--tertiary" type="submit" @click.prevent="donate">Donate</button>

        <p class="donateForm-errors" v-show="status">{{ status }} Please try again later or with a different card.</p>
    </form>
    
</template>

<script>
export default {
    props: ['stream'],

    data() {
        return {
            stripeEmail: '',
            stripeToken: '',
            amount: 5,
            streamId: this.stream.id,
            status: false
        };
    },

    created() {
        this.stripe = StripeCheckout.configure({
            key: Centrstage.stripeKey,
            image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
            locale: 'auto',
            token: (token) => {
                this.stripeEmail = token.email,
                this.stripeToken = token.id,

                this.$http.post('/purchases', this.$data)
                    .then(
                        response => console.log(this)
                    )
            }
        })

        // Close Checkout on page navigation:
        window.addEventListener('popstate', function() {
            this.stripe.close();
        });
    },

    methods: {
        donate() {
            this.stripe.open({
                name: 'Centrstage',
                description: 'Donate to '+this.stream.title+'.',
                zipCode: false,
                currency: 'eur',
                amount: this.amount*100,
                panelLabel: 'Donate {{amount}}'
            });
        }
    },
}
</script>
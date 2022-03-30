

import { createApp } from 'vue'
import axios from 'axios'
import ExampleComponent from './components/ExampleComponent'

const app = createApp({});
app.component('example-component', ExampleComponent)
app.mount('#app')









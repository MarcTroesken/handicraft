import Dashboard from './components/Dashboard'
import Customers from './components/Customers'
import CreateCustomer from './components/CreateCustomer'
import CreateProject from './components/CreateProject'

export default {
  mode: 'history',

  routes: [
    {
      path: '/',
      component: Dashboard
    },
    {
      path: '/customers',
      component: Customers
    },
    {
      path: '/customers/create',
      component: CreateCustomer
    },
    {
      path: '/projects/create',
      component: CreateProject
    }
  ],
}
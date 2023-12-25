(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[6],{27:function(e,t,o){"use strict";o.d(t,"a",(function(){return a}));var s=o(0),n=o(14),c=o.n(n);function a(e){const t=Object(s.useRef)(e);return c()(e,t.current)||(t.current=e),t.current}},303:function(e,t,o){"use strict";o.d(t,"a",(function(){return l}));var s=o(1),n=o(6),c=o(3),a=o(22),r=o(11),i=o(42);const l=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";const{cartCoupons:t,cartIsLoading:o}=Object(i.a)(),{createErrorNotice:l}=Object(n.useDispatch)("core/notices"),{createNotice:p}=Object(n.useDispatch)("core/notices"),{setValidationErrors:m}=Object(n.useDispatch)(c.VALIDATION_STORE_KEY),{isApplyingCoupon:u,isRemovingCoupon:d}=Object(n.useSelect)(e=>{const t=e(c.CART_STORE_KEY);return{isApplyingCoupon:t.isApplyingCoupon(),isRemovingCoupon:t.isRemovingCoupon()}},[l,p]),{applyCoupon:h,removeCoupon:b}=Object(n.useDispatch)(c.CART_STORE_KEY),g=t=>h(t).then(()=>(Object(r.applyCheckoutFilter)({filterName:"showApplyCouponNotice",defaultValue:!0,arg:{couponCode:t,context:e}})&&p("info",Object(s.sprintf)(
/* translators: %s coupon code. */
Object(s.__)('Coupon code "%s" has been applied to your cart.',"woocommerce"),t),{id:"coupon-form",type:"snackbar",context:e}),Promise.resolve(!0))).catch(e=>(m({coupon:{message:Object(a.decodeEntities)(e.message),hidden:!1}}),Promise.resolve(!1))),y=t=>b(t).then(()=>(Object(r.applyCheckoutFilter)({filterName:"showRemoveCouponNotice",defaultValue:!0,arg:{couponCode:t,context:e}})&&p("info",Object(s.sprintf)(
/* translators: %s coupon code. */
Object(s.__)('Coupon code "%s" has been removed from your cart.',"woocommerce"),t),{id:"coupon-form",type:"snackbar",context:e}),Promise.resolve(!0))).catch(t=>(l(t.message,{id:"coupon-form",context:e}),Promise.resolve(!1)));return{appliedCoupons:t,isLoading:o,applyCoupon:g,removeCoupon:y,isApplyingCoupon:u,isRemovingCoupon:d}}},304:function(e,t){},313:function(e,t,o){"use strict";o.d(t,"b",(function(){return i})),o.d(t,"a",(function(){return l}));var s=o(27),n=o(25),c=o(6),a=o(3);const r=function(){let e=arguments.length>0&&void 0!==arguments[0]&&arguments[0];const{paymentMethodsInitialized:t,expressPaymentMethodsInitialized:o,availablePaymentMethods:r,availableExpressPaymentMethods:i}=Object(c.useSelect)(e=>{const t=e(a.PAYMENT_STORE_KEY);return{paymentMethodsInitialized:t.paymentMethodsInitialized(),expressPaymentMethodsInitialized:t.expressPaymentMethodsInitialized(),availableExpressPaymentMethods:t.getAvailableExpressPaymentMethods(),availablePaymentMethods:t.getAvailablePaymentMethods()}}),l=Object.values(r).map(e=>{let{name:t}=e;return t}),p=Object.values(i).map(e=>{let{name:t}=e;return t}),m=Object(n.getPaymentMethods)(),u=Object(n.getExpressPaymentMethods)(),d=Object.keys(m).reduce((e,t)=>(l.includes(t)&&(e[t]=m[t]),e),{}),h=Object.keys(u).reduce((e,t)=>(p.includes(t)&&(e[t]=u[t]),e),{}),b=Object(s.a)(d),g=Object(s.a)(h);return{paymentMethods:e?g:b,isInitialized:e?o:t}},i=()=>r(!1),l=()=>r(!0)},327:function(e,t,o){"use strict";var s=o(13),n=o.n(s),c=o(0),a=o(5),r=o.n(a);const i=e=>"wc-block-components-payment-method-icon wc-block-components-payment-method-icon--"+e;var l=e=>{let{id:t,src:o=null,alt:s=""}=e;return o?Object(c.createElement)("img",{className:i(t),src:o,alt:s}):null},p=o(55);const m=[{id:"alipay",alt:"Alipay",src:p.m+"payment-methods/alipay.svg"},{id:"amex",alt:"American Express",src:p.m+"payment-methods/amex.svg"},{id:"bancontact",alt:"Bancontact",src:p.m+"payment-methods/bancontact.svg"},{id:"diners",alt:"Diners Club",src:p.m+"payment-methods/diners.svg"},{id:"discover",alt:"Discover",src:p.m+"payment-methods/discover.svg"},{id:"eps",alt:"EPS",src:p.m+"payment-methods/eps.svg"},{id:"giropay",alt:"Giropay",src:p.m+"payment-methods/giropay.svg"},{id:"ideal",alt:"iDeal",src:p.m+"payment-methods/ideal.svg"},{id:"jcb",alt:"JCB",src:p.m+"payment-methods/jcb.svg"},{id:"laser",alt:"Laser",src:p.m+"payment-methods/laser.svg"},{id:"maestro",alt:"Maestro",src:p.m+"payment-methods/maestro.svg"},{id:"mastercard",alt:"Mastercard",src:p.m+"payment-methods/mastercard.svg"},{id:"multibanco",alt:"Multibanco",src:p.m+"payment-methods/multibanco.svg"},{id:"p24",alt:"Przelewy24",src:p.m+"payment-methods/p24.svg"},{id:"sepa",alt:"Sepa",src:p.m+"payment-methods/sepa.svg"},{id:"sofort",alt:"Sofort",src:p.m+"payment-methods/sofort.svg"},{id:"unionpay",alt:"Union Pay",src:p.m+"payment-methods/unionpay.svg"},{id:"visa",alt:"Visa",src:p.m+"payment-methods/visa.svg"},{id:"wechat",alt:"WeChat",src:p.m+"payment-methods/wechat.svg"}];var u=o(26);o(304),t.a=e=>{let{icons:t=[],align:o="center",className:s}=e;const a=(e=>{const t={};return e.forEach(e=>{let o={};"string"==typeof e&&(o={id:e,alt:e,src:null}),"object"==typeof e&&(o={id:e.id||"",alt:e.alt||"",src:e.src||null}),o.id&&Object(u.a)(o.id)&&!t[o.id]&&(t[o.id]=o)}),Object.values(t)})(t);if(0===a.length)return null;const i=r()("wc-block-components-payment-method-icons",{"wc-block-components-payment-method-icons--align-left":"left"===o,"wc-block-components-payment-method-icons--align-right":"right"===o},s);return Object(c.createElement)("div",{className:i},a.map(e=>{const t={...e,...(o=e.id,m.find(e=>e.id===o)||{})};var o;return Object(c.createElement)(l,n()({key:"payment-method-icon-"+e.id},t))}))}},374:function(e,t){},375:function(e,t,o){"use strict";var s=o(18),n=o.n(s),c=o(0),a=o(1),r=o(2),i=o(11),l=o(45);class p extends c.Component{constructor(){super(...arguments),n()(this,"state",{errorMessage:"",hasError:!1})}static getDerivedStateFromError(e){return{errorMessage:e.message,hasError:!0}}render(){const{hasError:e,errorMessage:t}=this.state,{isEditor:o}=this.props;if(e){let e=Object(a.__)("We are experiencing difficulties with this payment method. Please contact us for assistance.","woocommerce");(o||r.CURRENT_USER_IS_ADMIN)&&(e=t||Object(a.__)("There was an error with this payment method. Please verify it's configured correctly.","woocommerce"));const s=[{id:"0",content:e,isDismissible:!1,status:"error"}];return Object(c.createElement)(i.StoreNoticesContainer,{additionalNotices:s,context:l.d.PAYMENTS})}return this.props.children}}p.defaultProps={isEditor:!1},t.a=p},408:function(e,t){},409:function(e,t,o){"use strict";var s=o(0),n=o(1),c=o(313),a=o(457),r=o(49),i=o(17),l=o.n(i),p=o(6),m=o(375),u=o(103);t.a=()=>{const{isEditor:e}=Object(r.a)(),{activePaymentMethod:t,paymentMethodData:o}=Object(p.useSelect)(e=>{const t=e(u.a);return{activePaymentMethod:t.getActivePaymentMethod(),paymentMethodData:t.getPaymentMethodData()}}),{__internalSetActivePaymentMethod:i,__internalSetExpressPaymentStarted:d,__internalSetPaymentIdle:h,__internalSetPaymentError:b,__internalSetPaymentMethodData:g,__internalSetExpressPaymentError:y}=Object(p.useDispatch)(u.a),{paymentMethods:v}=Object(c.a)(),O=Object(a.a)(),E=Object(s.useRef)(t),j=Object(s.useRef)(o),P=Object(s.useCallback)(e=>()=>{E.current=t,j.current=o,d(),i(e)},[t,o,i,d]),S=Object(s.useCallback)(()=>{h(),i(E.current,j.current)},[i,h]),k=Object(s.useCallback)(e=>{b(),g(e),y(e),i(E.current,j.current)},[i,b,g,y]),C=Object(s.useCallback)((function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";l()("Express Payment Methods should use the provided onError handler instead.",{alternative:"onError",plugin:"woocommerce-gutenberg-products-block",link:"https://github.com/woocommerce/woocommerce-gutenberg-products-block/pull/4228"}),e?k(e):y("")}),[y,k]),f=Object.entries(v),_=f.length>0?f.map(t=>{let[o,n]=t;const c=e?n.edit:n.content;return Object(s.isValidElement)(c)?Object(s.createElement)("li",{key:o,id:"express-payment-method-"+o},Object(s.cloneElement)(c,{...O,onClick:P(o),onClose:S,onError:k,setExpressPaymentError:C})):null}):Object(s.createElement)("li",{key:"noneRegistered"},Object(n.__)("No registered Payment Methods","woocommerce"));return Object(s.createElement)(m.a,{isEditor:e},Object(s.createElement)("ul",{className:"wc-block-components-express-payment__event-buttons"},_))}},457:function(e,t,o){"use strict";o.d(t,"a",(function(){return T}));var s=o(1),n=o(41),c=o(0),a=o(5),r=o.n(a),i=o(12),l=Object(c.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(c.createElement)("g",{fill:"none",fillRule:"evenodd"},Object(c.createElement)("path",{d:"M0 0h24v24H0z"}),Object(c.createElement)("path",{fill:"#000",fillRule:"nonzero",d:"M17.3 8v1c1 .2 1.4.9 1.4 1.7h-1c0-.6-.3-1-1-1-.8 0-1.3.4-1.3.9 0 .4.3.6 1.4 1 1 .2 2 .6 2 1.9 0 .9-.6 1.4-1.5 1.5v1H16v-1c-.9-.1-1.6-.7-1.7-1.7h1c0 .6.4 1 1.3 1 1 0 1.2-.5 1.2-.8 0-.4-.2-.8-1.3-1.1-1.3-.3-2.1-.8-2.1-1.8 0-.9.7-1.5 1.6-1.6V8h1.3zM12 10v1H6v-1h6zm2-2v1H6V8h8zM2 4v16h20V4H2zm2 14V6h16v12H4z"}),Object(c.createElement)("path",{stroke:"#000",strokeLinecap:"round",d:"M6 16c2.6 0 3.9-3 1.7-3-2 0-1 3 1.5 3 1 0 1-.8 2.8-.8"}))),p=Object(c.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(c.createElement)(i.Path,{fillRule:"evenodd",d:"M18.646 9H20V8l-1-.5L12 4 5 7.5 4 8v1h14.646zm-3-1.5L12 5.677 8.354 7.5h7.292zm-7.897 9.44v-6.5h-1.5v6.5h1.5zm5-6.5v6.5h-1.5v-6.5h1.5zm5 0v6.5h-1.5v-6.5h1.5zm2.252 8.81c0 .414-.334.75-.748.75H4.752a.75.75 0 010-1.5h14.5a.75.75 0 01.749.75z",clipRule:"evenodd"})),m=Object(c.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(c.createElement)(i.Path,{d:"M3.25 12a8.75 8.75 0 1117.5 0 8.75 8.75 0 01-17.5 0zM12 4.75a7.25 7.25 0 100 14.5 7.25 7.25 0 000-14.5zm-1.338 4.877c-.314.22-.412.452-.412.623 0 .171.098.403.412.623.312.218.783.377 1.338.377.825 0 1.605.233 2.198.648.59.414 1.052 1.057 1.052 1.852 0 .795-.461 1.438-1.052 1.852-.41.286-.907.486-1.448.582v.316a.75.75 0 01-1.5 0v-.316a3.64 3.64 0 01-1.448-.582c-.59-.414-1.052-1.057-1.052-1.852a.75.75 0 011.5 0c0 .171.098.403.412.623.312.218.783.377 1.338.377s1.026-.159 1.338-.377c.314-.22.412-.452.412-.623 0-.171-.098-.403-.412-.623-.312-.218-.783-.377-1.338-.377-.825 0-1.605-.233-2.198-.648-.59-.414-1.052-1.057-1.052-1.852 0-.795.461-1.438 1.052-1.852a3.64 3.64 0 011.448-.582V7.5a.75.75 0 011.5 0v.316c.54.096 1.039.296 1.448.582.59.414 1.052 1.057 1.052 1.852a.75.75 0 01-1.5 0c0-.171-.098-.403-.412-.623-.312-.218-.783-.377-1.338-.377s-1.026.159-1.338.377z"})),u=Object(c.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(c.createElement)(i.Path,{fillRule:"evenodd",d:"M5.5 9.5v-2h13v2h-13zm0 3v4h13v-4h-13zM4 7a1 1 0 011-1h14a1 1 0 011 1v10a1 1 0 01-1 1H5a1 1 0 01-1-1V7z",clipRule:"evenodd"})),d=o(81),h=o(26),b=o(20);o(374);const g={bank:p,bill:m,card:u,checkPayment:l};var y=e=>{let{icon:t="",text:o=""}=e;const s=!!t,n=Object(c.useCallback)(e=>s&&Object(h.a)(e)&&Object(b.b)(g,e),[s]),a=r()("wc-block-components-payment-method-label",{"wc-block-components-payment-method-label--with-icon":s});return Object(c.createElement)("span",{className:a},n(t)?Object(c.createElement)(d.a,{icon:g[t]}):t,o)},v=o(327),O=o(2),E=o(17),j=o.n(E),P=o(144),S=o(6),k=o(3),C=o(11),f=o(42),_=o(303),w=o(45),R=o(73),M=o(118),x=o(74);const I=(e,t)=>{const o=[],n=(t,o)=>{const s=o+"_tax",n=Object(b.b)(e,o)&&Object(h.a)(e[o])?parseInt(e[o],10):0;return{key:o,label:t,value:n,valueWithTax:n+(Object(b.b)(e,s)&&Object(h.a)(e[s])?parseInt(e[s],10):0)}};return o.push(n(Object(s.__)("Subtotal:","woocommerce"),"total_items")),o.push(n(Object(s.__)("Fees:","woocommerce"),"total_fees")),o.push(n(Object(s.__)("Discount:","woocommerce"),"total_discount")),o.push({key:"total_tax",label:Object(s.__)("Taxes:","woocommerce"),value:parseInt(e.total_tax,10),valueWithTax:parseInt(e.total_tax,10)}),t&&o.push(n(Object(s.__)("Shipping:","woocommerce"),"total_shipping")),o};var A=o(116);const T=()=>{const{onCheckoutBeforeProcessing:e,onCheckoutValidationBeforeProcessing:t,onCheckoutAfterProcessingWithSuccess:o,onCheckoutAfterProcessingWithError:a,onSubmit:r,onCheckoutSuccess:i,onCheckoutFail:l,onCheckoutValidation:p}=Object(R.b)(),{isCalculating:m,isComplete:u,isIdle:d,isProcessing:h,customerId:b}=Object(S.useSelect)(e=>{const t=e(k.CHECKOUT_STORE_KEY);return{isComplete:t.isComplete(),isIdle:t.isIdle(),isProcessing:t.isProcessing(),customerId:t.getCustomerId(),isCalculating:t.isCalculating()}}),{paymentStatus:g,activePaymentMethod:E,shouldSavePayment:T}=Object(S.useSelect)(e=>{const t=e(k.PAYMENT_STORE_KEY);return{paymentStatus:{get isPristine(){return j()("isPristine",{since:"9.6.0",alternative:"isIdle",plugin:"WooCommerce Blocks",link:"https://github.com/woocommerce/woocommerce-blocks/pull/8110"}),t.isPaymentIdle()},isIdle:t.isPaymentIdle(),isStarted:t.isExpressPaymentStarted(),isProcessing:t.isPaymentProcessing(),get isFinished(){return j()("isFinished",{since:"9.6.0",plugin:"WooCommerce Blocks",link:"https://github.com/woocommerce/woocommerce-blocks/pull/8110"}),t.hasPaymentError()||t.isPaymentReady()},hasError:t.hasPaymentError(),get hasFailed(){return j()("hasFailed",{since:"9.6.0",plugin:"WooCommerce Blocks",link:"https://github.com/woocommerce/woocommerce-blocks/pull/8110"}),t.hasPaymentError()},get isSuccessful(){return j()("isSuccessful",{since:"9.6.0",plugin:"WooCommerce Blocks",link:"https://github.com/woocommerce/woocommerce-blocks/pull/8110"}),t.isPaymentReady()},isReady:t.isPaymentReady(),isDoingExpressPayment:t.isExpressPaymentMethodActive()},activePaymentMethod:t.getActivePaymentMethod(),shouldSavePayment:t.getShouldSavePaymentMethod()}}),{__internalSetExpressPaymentError:z}=Object(S.useDispatch)(k.PAYMENT_STORE_KEY),{onPaymentProcessing:D,onPaymentSetup:V}=Object(M.b)(),{shippingErrorStatus:N,shippingErrorTypes:F,onShippingRateSuccess:B,onShippingRateFail:W,onShippingRateSelectSuccess:Y,onShippingRateSelectFail:L}=Object(x.b)(),{shippingRates:H,isLoadingRates:K,selectedRates:G,isSelectingRate:U,selectShippingRate:J,needsShipping:q}=Object(A.a)(),{billingAddress:Q,shippingAddress:X}=Object(S.useSelect)(e=>e(k.CART_STORE_KEY).getCustomerData()),{setShippingAddress:Z}=Object(S.useDispatch)(k.CART_STORE_KEY),{cartItems:$,cartFees:ee,cartTotals:te,extensions:oe}=Object(f.a)(),{appliedCoupons:se}=Object(_.a)(),ne=Object(c.useRef)(I(te,q)),ce=Object(c.useRef)({label:Object(s.__)("Total","woocommerce"),value:parseInt(te.total_price,10)});Object(c.useEffect)(()=>{ne.current=I(te,q),ce.current={label:Object(s.__)("Total","woocommerce"),value:parseInt(te.total_price,10)}},[te,q]);const ae=Object(c.useCallback)((function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";j()("setExpressPaymentError should only be used by Express Payment Methods (using the provided onError handler).",{alternative:"",plugin:"woocommerce-gutenberg-products-block",link:"https://github.com/woocommerce/woocommerce-gutenberg-products-block/pull/4228"}),z(e)}),[z]);return{activePaymentMethod:E,billing:{appliedCoupons:se,billingAddress:Q,billingData:Q,cartTotal:ce.current,cartTotalItems:ne.current,currency:Object(n.getCurrencyFromPriceResponse)(te),customerId:b,displayPricesIncludingTax:Object(O.getSetting)("displayCartPricesIncludingTax",!1)},cartData:{cartItems:$,cartFees:ee,extensions:oe},checkoutStatus:{isCalculating:m,isComplete:u,isIdle:d,isProcessing:h},components:{LoadingMask:P.a,PaymentMethodIcons:v.a,PaymentMethodLabel:y,ValidationInputError:C.ValidationInputError},emitResponse:{noticeContexts:w.d,responseTypes:w.e},eventRegistration:{onCheckoutAfterProcessingWithError:a,onCheckoutAfterProcessingWithSuccess:o,onCheckoutBeforeProcessing:e,onCheckoutValidationBeforeProcessing:t,onCheckoutSuccess:i,onCheckoutFail:l,onCheckoutValidation:p,onPaymentProcessing:D,onPaymentSetup:V,onShippingRateFail:W,onShippingRateSelectFail:L,onShippingRateSelectSuccess:Y,onShippingRateSuccess:B},onSubmit:r,paymentStatus:g,setExpressPaymentError:ae,shippingData:{isSelectingRate:U,needsShipping:q,selectedRates:G,setSelectedRates:J,setShippingAddress:Z,shippingAddress:X,shippingRates:H,shippingRatesLoading:K},shippingStatus:{shippingErrorStatus:N,shippingErrorTypes:F},shouldSavePayment:T}}}}]);
export enum ACTION_TYPES {
	SET_PAYMENT_IDLE = 'SET_PAYMENT_IDLE',
	SET_EXPRESS_PAYMENT_STARTED = 'SET_EXPRESS_PAYMENT_STARTED',
	SET_PAYMENT_READY = 'SET_PAYMENT_READY',
	SET_PAYMENT_PROCESSING = 'SET_PAYMENT_PROCESSING',
	SET_PAYMENT_ERROR = 'SET_PAYMENT_ERROR',
	SET_PAYMENT_METHODS_INITIALIZED = 'SET_PAYMENT_METHODS_INITIALIZED',
	SET_EXPRESS_PAYMENT_METHODS_INITIALIZED = 'SET_EXPRESS_PAYMENT_METHODS_INITIALIZED',
	SET_ACTIVE_PAYMENT_METHOD = 'SET_ACTIVE_PAYMENT_METHOD',
	SET_SHOULD_SAVE_PAYMENT_METHOD = 'SET_SHOULD_SAVE_PAYMENT_METHOD',
	SET_AVAILABLE_PAYMENT_METHODS = 'SET_AVAILABLE_PAYMENT_METHODS',
	SET_AVAILABLE_EXPRESS_PAYMENT_METHODS = 'SET_AVAILABLE_EXPRESS_PAYMENT_METHODS',
	REMOVE_AVAILABLE_PAYMENT_METHOD = 'REMOVE_AVAILABLE_PAYMENT_METHOD',
	REMOVE_AVAILABLE_EXPRESS_PAYMENT_METHOD = 'REMOVE_AVAILABLE_EXPRESS_PAYMENT_METHOD',
	INITIALIZE_PAYMENT_METHODS = 'INITIALIZE_PAYMENT_METHODS',
	SET_PAYMENT_METHOD_DATA = 'SET_PAYMENT_METHOD_DATA',
	SET_PAYMENT_RESULT = 'SET_PAYMENT_RESULT',
}

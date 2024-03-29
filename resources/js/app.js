Object.defineProperty(exports, "__esModule", { value: true });
const react_1 = require("@inertiajs/react");
const client_1 = require("react-dom/client");
(0, react_1.createInertiaApp)({
	resolve: (name) => {
		const pages = import.meta.glob("./Pages/**/*.tsx", { eager: true });
		return pages[`./Pages/${name}.tsx`];
	},
	setup({ el, App, props }) {
		(0, client_1.createRoot)(el).render(
			React.createElement(App, Object.assign({}, props)),
		);
	},
});

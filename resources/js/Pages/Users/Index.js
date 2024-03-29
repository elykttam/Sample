"use strict";
var __importDefault =
	(this && this.__importDefault) ||
	function (mod) {
		return mod && mod.__esModule ? mod : { default: mod };
	};
Object.defineProperty(exports, "__esModule", { value: true });
const react_1 = require("@inertiajs/react");
const Layout_1 = __importDefault(require("../../Layout"));
const react_2 = __importDefault(require("react"));
function Index() {
	return react_2.default.createElement(
		Layout_1.default,
		null,
		react_2.default.createElement(react_1.Head, { title: "Welcome" }),
		react_2.default.createElement(
			"div",
			{ className: "px-4 sm:px-6 lg:px-8" },
			react_2.default.createElement(
				"div",
				{ className: "sm:flex sm:items-center" },
				react_2.default.createElement(
					"div",
					{ className: "sm:flex-auto" },
					react_2.default.createElement(
						"h1",
						{ className: "text-base font-semibold leading-6 text-gray-900" },
						"Users",
					),
					react_2.default.createElement(
						"p",
						{ className: "mt-2 text-sm text-gray-700" },
						"A list of all the students in your account including their name, title, email and role.",
					),
				),
				react_2.default.createElement(
					"div",
					{ className: "mt-4 sm:ml-16 sm:mt-0 sm:flex-none" },
					react_2.default.createElement(
						"button",
						{
							type: "button",
							className:
								"block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600",
						},
						"Add user",
					),
				),
			),
			react_2.default.createElement(
				"div",
				{ className: "mt-8 flow-root" },
				react_2.default.createElement(
					"div",
					{ className: "-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8" },
					react_2.default.createElement("div", {
						className:
							"inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8",
					}),
					react_2.default.createElement("h1", null, "user"),
				),
			),
		),
	);
}
exports.default = Index;

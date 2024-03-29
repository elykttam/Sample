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
function Index({ students }) {
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
						"Students",
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
					react_2.default.createElement(
						"div",
						{
							className:
								"inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8",
						},
						react_2.default.createElement(
							"table",
							{ className: "min-w-full divide-y divide-gray-300" },
							react_2.default.createElement(
								"thead",
								null,
								react_2.default.createElement(
									"tr",
									null,
									react_2.default.createElement(
										"th",
										{
											scope: "col",
											className:
												"py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0",
										},
										"Name",
									),
									react_2.default.createElement(
										"th",
										{
											scope: "col",
											className:
												"py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0",
										},
										"Grades",
									),
									react_2.default.createElement(
										"th",
										{
											scope: "col",
											className:
												"px-3 py-3.5 text-left text-sm font-semibold text-gray-900",
										},
										"Birthdate / Age",
									),
									react_2.default.createElement(
										"th",
										{
											scope: "col",
											className:
												"px-3 py-3.5 text-left text-sm font-semibold text-gray-900",
										},
										"Subjects",
									),
									react_2.default.createElement(
										"th",
										{
											scope: "col",
											className: "relative py-3.5 pl-3 pr-4 sm:pr-0",
										},
										react_2.default.createElement(
											"span",
											{ className: "sr-only" },
											"Edit",
										),
									),
								),
							),
							react_2.default.createElement(
								"tbody",
								{ className: "divide-y divide-gray-200" },
								students.map((student) =>
									react_2.default.createElement(
										"tr",
										{ key: student.id },
										react_2.default.createElement(
											"td",
											{
												className:
													"whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0",
											},
											student.first_name,
										),
										react_2.default.createElement(
											"td",
											{
												className:
													"whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0",
											},
											student.birthdate,
										),
										react_2.default.createElement("td", {
											className:
												"whitespace-nowrap px-3 py-4 text-sm text-gray-500",
										}),
										react_2.default.createElement("td", {
											className:
												"whitespace-nowrap px-3 py-4 text-sm text-gray-500",
										}),
										react_2.default.createElement(
											"td",
											{
												className:
													"relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0",
											},
											react_2.default.createElement(
												"a",
												{
													href: "#",
													className: "text-indigo-600 hover:text-indigo-900",
												},
												"Edit",
												react_2.default.createElement(
													"span",
													{ className: "sr-only" },
													", Lindsay Walton",
												),
											),
										),
									),
								),
							),
						),
					),
				),
			),
		),
	);
}
exports.default = Index;

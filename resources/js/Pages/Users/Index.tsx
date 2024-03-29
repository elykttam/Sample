import { Head } from "@inertiajs/react";
import Layout from "../../Layout";
import React from "react";

export default function Index() {
	return (
		<Layout>
			<Head title="Welcome" />
			<div className="px-4 sm:px-6 lg:px-8">
				<div className="sm:flex sm:items-center">
					<div className="sm:flex-auto">
						<h1 className="text-base font-semibold leading-6 text-gray-900">
							Users
						</h1>
						<p className="mt-2 text-sm text-gray-700">
							A list of all the students in your account including their name,
							title, email and role.
						</p>
					</div>
					<div className="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
						<button
							type="button"
							className="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
						>
							Add user
						</button>
					</div>
				</div>
				<div className="mt-8 flow-root">
					<div className="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
						<div className="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8"></div>
						<h1>user</h1>
					</div>
				</div>
			</div>
		</Layout>
	);
}

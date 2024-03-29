import { useForm } from "@inertiajs/react";
import { XCircleIcon } from "@heroicons/react/20/solid";
import React from "react";

export default function Login() {
	const { data, errors, setData, post } = useForm({
		email: "admin@mail.com",

		password: "password",
	});

	const errorArray = Object.values(errors);

	const handleSubmit = (e) => {
		e.preventDefault();

		post("/login");
	};

	return (
		<>
			<div className="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8">
				<div className="sm:mx-auto sm:w-full sm:max-w-sm">
					<img
						className="mx-auto h-10 w-auto"
						src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
						alt="Your Company"
					/>
					<h2 className="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
						Sign in to your account
					</h2>
				</div>

				<div className="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
					{errorArray.length > 0 && (
						<div className="rounded-md bg-red-50 mb-2 p-4">
							<div className="flex">
								<div className="flex-shrink-0">
									<XCircleIcon
										className="h-5 w-5 text-red-400"
										aria-hidden="true"
									/>
								</div>
								<div className="ml-3">
									<h3 className="text-sm font-medium text-red-800">
										There were {errorArray.length} errors with your submission
									</h3>
									<div className="mt-2 text-sm text-red-700">
										<ul role="list" className="list-disc space-y-1 pl-5">
											{errorArray.map((err, index) => (
												<li key={index}>{err}</li>
											))}
										</ul>
									</div>
								</div>
							</div>
						</div>
					)}

					<form
						onSubmit={handleSubmit}
						className="space-y-6"
						action="#"
						method="POST"
					>
						<div>
							<label
								htmlFor="email"
								className="block text-sm font-medium leading-6 text-gray-900"
							>
								Email address
							</label>
							<div className="mt-2">
								<input
									value={data.email}
									onChange={(e) => setData("email", e.target.value)}
									id="email"
									name="email"
									type="text"
									autoComplete="email"
									className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
								/>
							</div>
						</div>

						<div>
							<div className="flex items-center justify-between">
								<label
									htmlFor="password"
									className="block text-sm font-medium leading-6 text-gray-900"
								>
									Password
								</label>
								<div className="text-sm">
									<a
										href="#"
										className="font-semibold text-indigo-600 hover:text-indigo-500"
									>
										Forgot password?
									</a>
								</div>
							</div>
							<div className="mt-2">
								<input
									value={data.password}
									onChange={(e) => setData("password", e.target.value)}
									id="password"
									name="password"
									type="password"
									autoComplete="current-password"
									className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
								/>
							</div>
						</div>

						<div>
							<button
								type="submit"
								className="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
							>
								Sign in
							</button>
						</div>
					</form>

					<p className="mt-10 text-center text-sm text-gray-500">
						Not a member?{" "}
						<a
							href="#"
							className="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"
						>
							Start a 14 day free trial
						</a>
					</p>
				</div>
			</div>
		</>
	);
}

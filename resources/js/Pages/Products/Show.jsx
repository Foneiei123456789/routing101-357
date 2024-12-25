import { Link } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

export default function Show({ product }) {
    return (
        <AuthenticatedLayout>
        <div className="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg">
            <h1 className="text-2xl font-semibold text-gray-800 text-center">{product.name}</h1>
            <img
                src={product.image}
                alt={product.name}
                className="w-full h-[360px] object-cover rounded-lg mt-4"
            />
            <p className="mt-4 text-gray-600">{product.description}</p>
            <p className="mt-4 text-lg font-medium text-gray-800">
                Price: <span className="text-green-600">{product.price} Baht</span>
            </p>
            <hr className="my-6 border-gray-300" />
            <Link
                href="/products"
                className="inline-block px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-500"
            >
                Back to All Products
            </Link>
        </div>
        </AuthenticatedLayout>
    );
}

import { type SharedData } from '@/types';
import { Head, Link, usePage } from '@inertiajs/react';

export default function Welcome() {
    const { auth } = usePage<SharedData>().props;

    return (
        <>
            <div>
                <h1>Começando o react aqui</h1>
            </div>
        </>
    );
}
